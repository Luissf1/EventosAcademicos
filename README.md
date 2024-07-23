# Academic Event Organizer

## Overview

Academic Event Organizer is a web application designed to streamline the administration and organization of academic events. Developed using PHP Laravel for the backend and MySQL for the database, this application offers comprehensive tools to manage event details, participant information, and schedules efficiently.

## Features

- **User Authentication**: Secure login and registration system.
- **Event Creation**: Create and manage academic events.
- **Participant Management**: Add and manage event participants.
- **Schedule Management**: Organize event schedules and sessions.

## Technologies Used

- **Backend**: PHP Laravel
- **Database**: MySQL
- **Frontend**: Blade Templating Engine
- **Authentication**: Laravel Breeze (or any other authentication package used)

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- Composer
- MySQL
- Node.js and npm (for frontend dependencies)

### Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/Luissf1/EventosAcademicos.git
    cd EventosAcademicos
    ```

2. **Backend Setup:**

    - Install dependencies:
        ```bash
        composer install
        ```

    - Copy `.env.example` to `.env` and configure your database settings:
        ```bash
        cp .env.example .env
        ```

    - Generate application key:
        ```bash
        php artisan key:generate
        ```

    - Run migrations:
        ```bash
        php artisan migrate
        ```

    - Install frontend dependencies:
        ```bash
        npm install
        ```

    - Compile assets:
        ```bash
        npm run dev
        ```

    - Start the Laravel server:
        ```bash
        php artisan serve
        ```

## Usage

1. **Register/Login**: Create a new account or log in with existing credentials.
2. **Create Event**: Start by creating a new academic event.
3. **Manage Participants**: Add participants and manage their information.
4. **Organize Schedule**: Create and manage event schedules and sessions.

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature-name`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/your-feature-name`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

If you have any questions or feedback, feel free to contact me.
