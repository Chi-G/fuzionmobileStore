# FuzionMobile - Educational Technology Official Platform

FuzionMobile is a cutting-edge educational technology platform built with Laravel 12, designed to empower learning through innovative software, hardware, and services. It bridges the gap between technology and education, offering scalable solutions for institutions, businesses, and lifelong learners.

## Features

- **Homepage**: Dynamic hero slider, quick links, and latest blog highlights.
- **About Us**: Editable company description, mission, vision, with media uploads (logos, videos).
- **Team Management**: Admin-managed team profiles with drag-and-drop ordering.
- **Services**: Categorized offerings (e.g., SD Card sales, training, content development).
- **Events**: Event creation with RSVP forms, virtual/physical options, and past event archives.
- **Webinars**: Zoom integration for scheduling, registration, and recording playback.
- **Marketing**: Strategy updates with downloadable brochures.
- **Store**: E-commerce functionality for hardware (e.g., VR headsets) and software licenses.
- **Blogs & Journals**: Rich text editor, categorization, and PDF uploads for research papers.
- **Authentication**: Separate user and admin authentication using Laravel Breeze.
- **Backend**: CMS-like features with role-based access (Admin, Content Manager, Event Manager).

## Tech Stack

- **Framework**: Laravel 12
- **Database**: SQLite (development), MySQL (production-ready)
- **Frontend**: Blade templates with Vite for asset management
- **Authentication**: Laravel Breeze with custom admin guard
- **API Integrations**: Zoom API via Guzzle HTTP
- **Storage**: Laravel Filesystem for media uploads
- **Testing**: Factory-based seeding for development

## Prerequisites

- PHP >= 8.2
- Composer
- Node.js & npm
- SQLite (or MySQL for production)
- Zoom JWT Token (for webinar integration)

## Installation

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/Chi-G/fuzionmobile.git
   cd fuzionmobile
