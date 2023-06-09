# Token Management System

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/jatin-98/token/blob/main/LICENSE)

This repository contains a PHP-based token management system for generating, encoding, decoding, and managing tokens. The tokens can be used for various purposes, such as authentication, authorization, or token-based workflows.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
<!-- - [Contributing](#contributing) -->
<!-- - [License](#license) -->

## Features

- Generate tokens for a given email.
- Encode and decode tokens using AES-256-CBC encryption.
- Store tokens securely in a specified directory.
- Check token presence and expiry.

## Installation

1. Clone the repository:

   ```shell
   git clone https://github.com/jatin-98/token.git

2. Navigate to the project directory:
   ```shell 
   cd token-management-system

3. install the dependencies:
   ```shel 
   composer install
   
## Usage

1. Include the necessary namespaces and require the relevant files in your PHP script:

```shel 

<?php

   require_once 'path/to/TokenMiddleware.php';

   use Jatin\TokenMiddleware;
   
```

2. use Token::generateToken('data') to generate token:

```shel 
<?php

   require_once 'path/to/TokenMiddleware.php';

   use Jatin\TokenMiddleware;
   
   $email = 'your-email@email.com';
   $token = Token::generateToken($email);

   echo "Your token - $token";

<!-- ## License

This project is licensed under the MIT License.

- `[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/your-username/token-management-system/blob/main/LICENSE)` - Replace `your-username` with your GitHub username and `token-management-system` with the name of your repository.
- `git clone https://github.com/your-username/token-management-system.git` - Replace `your-username` with your GitHub username and `token-management-system` with the name of your repository.
- `require_once 'path/to/TokenMiddleware.php';` - Replace `'path/to/TokenMiddleware.php'` with the actual path to the `TokenMiddleware.php` file in your project.-->
