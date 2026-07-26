# WNat Client Area

WordPress hosting/service customer panel plugin.

## Installation
1. Upload `new_plugin` to `wp-content/plugins/`.
2. Activate **WNat Client Area** from WordPress plugins.
3. Create a page and add:

```
[wnat_panel]
```

## Shortcodes

Customer dashboard:
```
[wnat_panel]
```

Products:
```
[wnat_products]
```

Tickets:
```
[wnat_tickets]
```

## Features

- Product custom post type
- Customer dashboard
- Purchase request database
- User services database
- Ticket system
- Admin management menu
- RTL frontend design
- Nonce and sanitization security

## Database Tables

- wp_wnat_requests
- wp_wnat_services
- wp_wnat_tickets

## Folder Structure

```
includes/  PHP classes
assets/    CSS and JavaScript
templates/ Frontend templates
```

## Version

1.0.0
