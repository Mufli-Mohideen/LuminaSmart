# LuminaSmart

LuminaSmart is an IoT project that uses NodeMCU, a web-based frontend, and a MySQL database to control two LEDs. This project demonstrates the integration of hardware and software to create a smart lighting system.

## Features

- 🖥️ **Web-based Control**: Control the LEDs from any device with a web browser.
- 🌐 **NodeMCU Integration**: Uses the NodeMCU microcontroller for Wi-Fi connectivity and LED control.
- 💾 **MySQL Database**: Stores the state of the LEDs in a database for persistent control.
- 🎨 **HTML/CSS Frontend**: A simple and intuitive interface to control the LEDs.

## Installation

### Hardware Requirements

- NodeMCU (ESP8266 or ESP32)
- 2 LEDs
- Resistors (appropriate values for the LEDs)
- Breadboard and jumper wires

### Software Requirements

- Arduino IDE
- MySQL Server
- Web Server (Wampserver)

### Setup Instructions

1. **Clone the repository:**

   ```bash
   git clone https://github.com/Mufli-Mohideen/LuminaSmart.git

2. **NodeMCU Setup:**

   - Open the Arduino IDE.
   - Install the necessary libraries for NodeMCU (ESP8266).
   - Upload the `nodemcu.ino` file to the NodeMCU.
  
3. Database Setup:

   - Install MySQL Server if not already installed.
   - Create a database named `luminasmart`.
   - Run the `database.sql` script to create the necessary tables:
     ```sql
     -- Create the database
     CREATE DATABASE luminasmart;

     -- Use the created database
     USE luminasmart;

     -- Create the table to store LED states
     CREATE TABLE leddb (
         id INT AUTO_INCREMENT PRIMARY KEY,
         bulb1_state TINYINT(1) NOT NULL,
         bulb2_state TINYINT(1) NOT NULL,
         updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
     );
     ```
     
4. Web Server Setup:

   - Place the contents of the `web` directory in your web server's root directory.
   - Configure your web server to serve the HTML, CSS, and PHP files.

5. Configuration:

   - Update the database connection details in the `retrieve.php` file.
   - Ensure the NodeMCU is connected to your Wi-Fi network and has the correct IP address set in the `retrieve.php` file.
  
## Contributing

Contributions are welcome! If you'd like to add features, fix bugs, or improve the project, feel free to fork this repository and submit a pull request.

## License

This project is licensed under the MIT License - see the LICENSE file for details.

**Developed with ❤️ by Mufli Mohideen**

