## Installation

1. **Clone the repository:**

    ```sh
    git clone https://github.com/BelomorUA/logger.git
    cd logger
    ```

2. **Install dependencies:**

    ```sh
    composer install
    npm install
    npm run dev
    ```

3. **Set up environment variables:**

   Copy the `.env.example` to `.env` and update the necessary environment variables:

    ```sh
    copy .env.example .env
    php artisan key:generate
    ```

   Update the following variables in your `.env` file:

    ```env
    LOGGING_DEFAULT=file
    LOGGING_EMAIL=admin@example.com
    KIBANA_HOST=http://localhost:9200
    KIBANA_INDEX=logs
    ```

4. **Run migrations(if you want to use DatabaseLogger):**

    ```sh
    php artisan migrate
    ```

5. **Install ElasticSearch(if you want use kibana/grafana):**

   ```sh
   composer require elasticsearch/elasticsearch
    ```
   

6. **Start the server:**

    ```sh
    php artisan serve
    ```

7. **Access the application:**

   Open your browser and go to `http://localhost:8000`
 
   Default storage "File" \storage\logs\custom.log

   HomeController send logs for test, also you can send log by using form


