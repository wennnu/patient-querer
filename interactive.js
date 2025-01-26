var database = require('mysql');

// Create connection
var conn = database.createConnection({
    host: "localhost",
    user: "root",
    password: "24@mcGill.1176-ws",
    database: "Patients"
});

conn.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
    conn.query("SELECT * FROM patients", function (err, result, fields) {
        if (err) throw err;
        console.log(result);
    });
});