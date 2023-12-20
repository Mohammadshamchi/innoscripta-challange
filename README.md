
## Overview

This document provides the necessary steps to set up and run the full-stack application for the Innoscripta Challenge. The stack consists of a React-based frontend and a Laravel-based backend.

## Project Structure

- `/backend`: Contains the Laravel application code and Dockerfile.
- `/frontend`: Contains the React application code and Dockerfile.
- `docker-compose.yml`: Root-level file that defines and orchestrates the multi-container Docker setup.

## Prerequisites

- Docker
- Docker Compose
- Git (for version control and deployment)

## Local Development Setup

### Cloning the Repository

To clone the repository including its submodules, use the following command:

```sh
git clone --recurse-submodules https://github.com/Mohammadshamchi/innoscripta-challenge.git
```

### Running the Application

Navigate to the root directory of the cloned repository and run the application using Docker Compose:

```sh
docker-compose up --build
```

This command will build the Docker images for both the frontend and backend services and start the containers.

### Accessing the Application

- **Frontend**: The React application will be available at [http://localhost](http://localhost).
- **Backend**: The Laravel API will be accessible at [http://localhost:8000](http://localhost:8000).

## Frontend Development

### Technologies

- React
- Tailwind CSS (for styling)

### Structure

The React code is structured according to best practices and includes components, services, and context providers for state management.

### Running Locally

To run the frontend separately for development purposes, navigate to the `frontend` directory and run:

```sh
npm install
npm start
```

### Building for Production

To create a production build, run:

```sh
npm run build
```

## Backend Development

### Technologies

- Laravel
- MySQL (for database)

### Structure

The Laravel application follows MVC architecture with controllers, models, and views organized in the respective directories.

### Running Migrations

To run database migrations, navigate to the `backend` directory and execute:

```sh
php artisan migrate
```

### Seeding the Database

To seed the database with initial data, run:

```sh
php artisan db:seed
```

## Deployment

### Docker Containers

Deployment is handled via Docker. Each service (frontend and backend) has its own Dockerfile specifying the build process.

### Docker Compose

The `docker-compose.yml` file orchestrates the deployment of both services. It should be used in production with an appropriate production configuration.

### Continuous Integration / Continuous Deployment (CI/CD)

CI/CD can be set up using platforms like Jenkins, GitLab CI, or GitHub Actions to automate the deployment process upon commits to the main branch.

## Best Practices

- Keep dependencies up to date to avoid security vulnerabilities.
- Write unit and integration tests for both frontend and backend services.
- Use environment variables to manage configuration and secrets.

## Support

For any technical issues or questions about the setup, contact the development team or the repository maintainer.

---
