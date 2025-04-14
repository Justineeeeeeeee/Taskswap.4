TaskSwap – Gamified Online Freelancing Platform
TaskSwap is a browser-based Laravel web application that reimagines online freelancing by introducing gamification into the task hiring and fulfillment process. Whether you're a client looking for skilled freelancers or a freelancer seeking rewarding gigs, TaskSwap provides a secure, engaging, and streamlined platform to collaborate and grow.

🚀 Features
🧑‍💼 User Profiles: Clients and freelancers can create detailed profiles including skills, experience, education, and portfolios.

📋 Task Posting: Clients can post projects with budgets, categories, and requirements.

💬 Live Chat: Real-time messaging for seamless communication between users.

💳 Secure Payments: Integrated token system and GCash payment for instant transactions.

🏆 Gamification: Daily rewards, leaderboard, mini-games, and achievement points to enhance engagement.

🛠 Task Management: Freelancers can browse and apply for tasks. Clients can review and hire.

⭐ Ratings & Reviews: Clients can leave feedback after task completion.

🧾 Transaction History: Cash-in and cash-out with detailed logging and administrative oversight.

🖼 Portfolio Galleries: Freelancers can showcase previous work.

🔎 Advanced Search: Robust search and filtering options.

🧑‍🤝‍🧑 Collaborative Workspace: Real-time file sharing and task collaboration.

🔐 Security: Role-based access, encrypted data, and HTTPS enforcement.

🛠️ Tech Stack
Backend: Laravel 10+

Frontend: Blade Templates, Vue.js/JavaScript

Database: MySQL

Payment: GCash Integration

Authentication: Laravel Breeze / Sanctum

Hosting: Hostinger

Version Control: GitHub Repository

📦 Installation
bash
Copy
Edit
git clone https://github.com/Justineeeeeeeee/Taskswap.3.git
cd Taskswap.3
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed # (if seeders are included)
npm install && npm run dev
php artisan serve
Set your .env database and GCash credentials accordingly.

🖥️ Minimum Requirements
PHP >= 8.1

Laravel >= 10

MySQL or MariaDB

Node.js + NPM

Composer

Apache/Nginx with HTTPS

GCash credentials (for token-based payments)

🎮 Gamified Experience
🎯 Leaderboard: Gain ranks by completing tasks.

🧩 Mini-games: Earn bonus tokens through “Find the Piece,” “Spin Game,” and “Complete the Mission.”

🏅 Badges: Awarded for milestones like top freelancer, repeat clients, etc.

🔐 Security Measures
Role-based access control

Password encryption and validation

Encrypted token transactions

SSL/TLS for secure communication

Admin panel for monitoring and auditing

📂 Directory Structure Highlights
app/Models: Eloquent models like User, Post, Portfolio, CashIn, CashOut, etc.

app/Http/Controllers: Business logic and API endpoints.

resources/views: Blade templates for UI rendering.

routes/web.php: Web route definitions.

public/: Public assets and entry point.

📄 Documentation
Full technical documentation is available in the PDF: TaskSwap Technical Documentation

Prototype on Figma: TaskSwap UX Design

🙌 Authors
Crackers Software Solutions – May 2024
Developed by:

Reylan M. Belardo

Rosemarie A. Bullo

Justine M. Consulta

Cyrille John Eleazar

Mary Thalia Cygie Morata

Katherine Joyce Ocares

Angelo Uriel P. Pelagio

📃 License
All rights reserved © Crackers Software Solutions 2024
This project is for educational and demonstrative purposes.
