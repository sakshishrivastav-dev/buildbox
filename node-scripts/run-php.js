const { exec } = require("child_process");

// This command executes the Artisan command from Laravel.
const command = "php C:/xampp/htdocs/my-laravel-app/artisan some:command";

exec(command, (error, stdout, stderr) => {
    if (error) {
        console.error(`Error executing command: ${error.message}`);
        return;
    }
    if (stderr) {
        console.error(`stderr: ${stderr}`);
        return;
    }
    console.log(`stdout: ${stdout}`); // Output from the Laravel command
});
        