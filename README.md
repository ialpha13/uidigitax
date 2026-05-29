# UIDigitax

UIDigitax is a PHP-based digital agency website with custom pages for services, portfolio, blogs, and contact.

## Features

- Multi-page website architecture using PHP includes
- Dedicated pages for services, portfolio, blogs, and policies
- Reusable navbar/footer components
- Floating WhatsApp chat widget integration
- Modular CSS/JS structure by page and section

## Tech Stack

- PHP 8.x
- HTML5
- CSS3
- Vanilla JavaScript

## Project Structure

```text
assets/       Frontend CSS, JS, and images
blogs/        Individual blog pages
chat/         WhatsApp floating chat widget
data/         JSON content sources
includes/     Shared PHP layout/components
pages/        Main site pages
portfolios/   Portfolio detail pages
index.php     Entry redirect
```

## Local Development (WAMP)

1. Copy the project into `C:\wamp64\www\uidigitax`.
2. Start Apache from WAMP.
3. Open:
   - `http://localhost/uidigitax/`

## Deployment Notes

- Ensure PHP 8.x compatibility on the server.
- Keep `data/*.json` readable by the web server.
- Update WhatsApp number/message in `chat/whatsapp.php` if needed.

## License

This project is licensed under the MIT License. See [LICENSE](LICENSE).
