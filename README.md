# Filament ApexCharts Demo

Explore the sample PHP charts created to show some of the enticing features packed in ApexCharts.
All examples here are included with source code to save your development time.

![screenshot](https://raw.githubusercontent.com/leandrocfe/filament-apex-charts-demo/master/screenshots/example.jpg)

## Installation

Clone the repo locally:

```bash
git clone https://github.com/leandrocfe/filament-apex-charts-demo.git
```

Switch to the repo folder:

```bash
cd filament-apex-charts-demo
```

Install dependencies:

```bash
composer install
npm install && npm run build
```

Setup configuration:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```bash
touch database/database.sqlite
```

You may run the following commands in your terminal:

```bash
php artisan migrate --seed
```

## Usage

After the project has been built, start Laravel's local development server using the Laravel's Artisan CLI serve command:

```bash
php artisan serve
```

Once you have started the Artisan development server, your application will be accessible in your web browser at [http://localhost:8000/admin](http://localhost:8000/admin).

You can choose a user's credentials and authenticate to access the Filament Admin Panel (default password: _password_).

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
