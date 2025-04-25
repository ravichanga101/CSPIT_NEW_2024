const XLSX = require('xlsx');
const fs = require('fs');

// Read the Excel file
const workbook = XLSX.readFile('club.xlsx');
const worksheet = workbook.Sheets[workbook.SheetNames[0]];

// Convert to JSON
const data = XLSX.utils.sheet_to_json(worksheet);

// Process the data to create the desired JSON structure
const clubs = data.map(row => {
    try {
        // Split faculty coordinators into array of objects
        const facultyCoordinators = row['Faculty Coordinators'] ?
            row['Faculty Coordinators'].split(';').map(faculty => {
                const parts = faculty.split(',');
                return {
                    name: parts[0]?.trim() || '',
                    position: parts[1]?.trim() || '',
                    email: parts[2]?.trim() || '',
                    phone: parts[3]?.trim() || '',
                    image: parts[0] ? `img/faculty/${parts[0].toLowerCase().replace(/\s+/g, '-')}.jpg` : ''
                };
            }) : [];

        // Split student coordinators into array of objects
        const studentCoordinators = row['Student Coordinators'] ?
            row['Student Coordinators'].split(';').map(student => {
                const parts = student.split(',');
                return {
                    name: parts[0]?.trim() || '',
                    idNumber: parts[1]?.trim() || '',
                    position: parts[2]?.trim() || ''
                };
            }) : [];

        // Split events into array of objects
        const events = row['Events'] ?
            row['Events'].split(';').map(event => {
                const parts = event.split(',');
                return {
                    name: parts[0]?.trim() || '',
                    date: parts[1]?.trim() || '',
                    description: parts[2]?.trim() || '',
                    images: parts[3] ? parts[3].split('|').map(img => img.trim()) : [],
                    report: parts[4]?.trim() || '',
                    mainImage: parts[3] ? parts[3].split('|')[0].trim() : ''
                };
            }) : [];

        // Split gallery into array of objects
        const gallery = row['Gallery'] ?
            row['Gallery'].split(';').map(item => {
                const parts = item.split(',');
                return {
                    url: parts[0]?.trim() || '',
                    title: parts[1]?.trim() || ''
                };
            }) : [];

        return {
            "Club ID": row['Club ID'] || '',
            "Club Name": row['Club Name'] || '',
            "Logo": row['Logo'] || '',
            "About": row['About'] || '',
            "Faculty Coordinators": facultyCoordinators,
            "Student Coordinators": studentCoordinators,
            "Events": events,
            "Gallery": gallery
        };
    } catch (error) {
        console.error('Error processing row:', row, error);
        return null;
    }
}).filter(club => club !== null);

// Create the final JSON structure
const jsonData = {
    clubs: clubs
};

// Write to file
fs.writeFileSync('clubs.json', JSON.stringify(jsonData, null, 2));

console.log('Conversion completed successfully!'); 