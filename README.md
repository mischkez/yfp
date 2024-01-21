# Has no name

For learning purposes only.
It's meant to test how Symfony and Laravel work with multiple databases.
The setup is simple, we have 1 master with 2 databases and 1 slave db replicating the master's databases.

Files for setting up the databases:

- larablog/.env (Laravel's environment file)
- larablog/config/database.php (Laravel's database configuration file)
- larablog/database/migrations/ (Laravel's migrations)

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Installation

Before the installation, make sure you have [Docker](https://docs.docker.com/get-docker/) and [Docker Compose](https://docs.docker.com/compose/install/) installed on your machine.

1. Clone the repository:

   ```bash
   git clone https://github.com/mischkez/yfp.git
   ```

2. Navigate to the project directory:

   ```bash
   cd yfp
   ```

3. Build and run containers:

   ```bash
   ./init.sh
   ```

4. Install dependencies:

   For now you have to install the dependencies manually, I'll add a script for this later.

## Usage

1. Add the following lines to your `/etc/hosts` file:

   ```bash
   127.0.0.1        symfony.test
   127.0.0.1        laravel.test
   ```

2. Open your web browser and visit `http://symfony.test` or `http://laravel.test`.

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch: `git checkout -b feature/your-feature-name`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature/your-feature-name`.
5. Submit a pull request.

## License

You do whatever you want with this project.
