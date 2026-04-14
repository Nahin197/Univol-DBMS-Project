# 🎓 UniVol — University Volunteer Management System

<div align="center">

![UniVol Banner](https://img.shields.io/badge/UniVol-Volunteer%20Management-blue?style=for-the-badge&logo=github)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![DaisyUI](https://img.shields.io/badge/DaisyUI-5A0EF8?style=for-the-badge&logo=daisyui&logoColor=white)

**Your Ultimate Volunteer Management System for Universities!**

</div>

---

## 📌 About The Project

**UniVol** is a full-stack web application designed to streamline and manage volunteer activities within a university environment. It brings together **Volunteers**, **Clubs**, **Authorities** (Faculty/Varsity), and a **System Admin** under one unified platform — enabling seamless event creation, registration, complaint handling, announcements, and gamified badge-based rewards for volunteers.

---

## 🌐 Public Landing Pages

| Page | Description |
|------|-------------|
| `index.php` | Hero landing page with "Get Started" button |
| `index_about_us.php` | About UniVol section |
| `index_event.php` | Publicly visible upcoming events |
| `index_top_vol.php` | Top contributor spotlight (highest points) |
| `index_contact_us.php` | Contact form — sends queries to admin |
| `index_choose_option.php` | Login role selector (Volunteer / Club / Authority / Admin) |

---

## 👥 User Roles

UniVol supports **4 distinct user roles**, each with a dedicated portal and permission set:

### 1. 🙋 Volunteer
Students who sign up, register for events, and earn points & badges.

### 2. 🏛️ Club
University clubs that organize and manage events, submit complaints, and post announcements.

### 3. 🎓 Authority (Faculty / Varsity)
University Faculty or Varsity bodies that can create events, manage volunteers, and post announcements.

### 4. 🛡️ Admin
The superuser who oversees the entire system — manages all users, events, complaints, and platform content.

---

## ✨ Features

### 👤 Volunteer Features
- **Registration & Login** — Sign up with Student ID, name, email, phone, department, and skills
- **Upcoming Events** — Browse and filter approved events by required skill
- **Event Registration** — One-click registration with slot availability check (+10 points on success)
- **My Events** — View all upcoming events the volunteer has registered for
- **Registration History** — Track past event registrations with completion status
- **Announcements** — See announcements for events the volunteer is registered in
- **Leaderboard** — Compare ranking by points or events participated (ascending/descending)
- **Social Platform** — Create posts and comment on other volunteers' posts
- **View Participants** — See who else is participating in an event
- **Badge System** — Earn ranked badges based on accumulated points:
  - 🟢 Newbie (0–99 pts)
  - 🥉 Bronze (100–199 pts)
  - 🥈 Silver (200–299 pts)
  - 🥇 Gold (300–399 pts)
  - ⚔️ Vanguard (400–499 pts)
  - 💎 Elite (500+ pts)
- **Profile Management** — View profile details, edit profile (name, email, phone, skills)
- **Password Change** — Secure password update
- **Ban System** — Banned accounts cannot log in until the ban period expires

---

### 🏛️ Club Features
- **Registration & Login** — Sign up with Club ID, name, email, contact number, president name
- **Create Events** — Submit events for admin approval with full details (name, description, skill, date, time, location, deadline, volunteer count)
- **Event Management** — View hosted events and their details
- **Event History** — View past events
- **Volunteer List** — See all registered volunteers per event
- **Complaint System** — Submit complaints against volunteers for specific events
- **Announcements** — Post announcements for specific events they host
- **My Announcements** — View all announcements posted by the club
- **Profile Management** — Edit club profile details
- **Password Change** — Secure password update

---

### 🎓 Authority Features
- **Registration & Login** — Sign up with Authority ID, name, email, contact, and type (Faculty/Varsity)
- **Create Events** — Submit events for admin approval
- **Event Management** — View hosted events and details
- **Event History** — Track past events
- **Volunteer List** — See volunteers registered for their events
- **Complaint System** — File complaints against volunteers
- **Announcements** — Post event-specific announcements
- **My Announcements** — View all posted announcements
- **Profile Management** — Edit personal profile
- **Password Change** — Secure password update

---

### 🛡️ Admin Features
- **Dashboard** — Real-time statistics: Total Users, Volunteers, Clubs, Events
- **Volunteer Management** — Search/view all volunteers, edit volunteer data (points, badge, ban status, ban duration, penalty count), delete volunteers
- **Club Management** — Create, search, edit, and delete clubs
- **Authority Management** — Create, search, edit, and delete authorities
- **Event Management** — Create, search, edit, view details, and delete events
- **Event Request Handling** — Approve or decline pending event requests from clubs/authorities
- **Issue/Complaint Handling** — Review complaints and apply penalties:
  - Deduct 5 points
  - Ban for 3 days (−10 points)
  - Ban for 7 days (−25 points)
  - Permanent ban (−50 points)
- **Query Management** — View and resolve public contact form queries
- **Page Content Editor** — Edit dynamic content for About Us, Contact Us, Home sections
- **Password Change** — Secure admin password update

---

## 🗂️ Project Structure

```
project/
│
├── config/
│   └── db_connect.php          # MySQL database connection
│
├── templates/
│   ├── header.php              # Public site header/navbar
│   └── footer.php              # Public site footer
│
├── badge/                      # Badge image assets
│   ├── newbie.png
│   ├── bronze.png
│   ├── silver.jpg
│   ├── gold.jpg
│   ├── vangurd.png
│   └── elite.png
│
├── Logo/                       # Logo and image assets
│   └── [images]
│
├── css file/
│   └── styles.css              # Custom styles
│
├── admin/                      # (Admin directory placeholder)
│
│── Public Pages
│   ├── index.php
│   ├── index_about_us.php
│   ├── index_contact_us.php
│   ├── index_event.php
│   ├── index_top_vol.php
│   └── index_choose_option.php
│
├── Volunteer Portal
│   ├── volunteerLogin.php
│   ├── volunteerSignup.php
│   ├── volunteer_header.php
│   ├── volunteer_logout.php
│   ├── vol_upcoming_event.php
│   ├── vol_event.php
│   ├── vol_event_details.php
│   ├── vol_reg_event.php
│   ├── vol_reg_history.php
│   ├── vol_announcement.php
│   ├── vol_leaderboard.php
│   ├── vol_social.php
│   ├── vol_view_participant.php
│   ├── vol_badge_info.php
│   ├── vol_profile_details.php
│   ├── vol_profile_edit.php
│   └── vol_pass_change.php
│
├── Club Portal
│   ├── clubLogin.php
│   ├── clubSignup.php
│   ├── club_header.php
│   ├── club_logout.php
│   ├── club_event_details.php
│   ├── club_create_event.php
│   ├── club_event_history.php
│   ├── club_volunteer_list.php
│   ├── club_complain.php
│   ├── club_announcement.php
│   ├── club_my_announcements.php
│   ├── club_edit_profile.php
│   └── club_pass_change.php
│
├── Authority Portal
│   ├── authorityLogin.php
│   ├── authoritySignup.php
│   ├── authority_header.php
│   ├── authority_logout.php
│   ├── authority_event_details.php
│   ├── authority_create_event.php
│   ├── authority_event_history.php
│   ├── authority_volunteer_list.php
│   ├── authority_complain.php
│   ├── authority_announcement.php
│   ├── authority_my_announcements.php
│   ├── authority_edit_profile.php
│   └── authority_pass_change.php
│
└── Admin Portal
    ├── adminLogin.php
    ├── admin_header.php
    ├── admin_footer.php
    ├── admin_logout.php
    ├── admin_dashboard.php
    ├── admin_vol_page.php
    ├── admin_edit_vol.php
    ├── admin_delete_vol.php
    ├── admin_create_club.php
    ├── admin_manage_club.php
    ├── admin_edit_club.php
    ├── admin_delete_club.php
    ├── admin_create_authority.php
    ├── admin_manage_authority.php
    ├── admin_edit_authority.php
    ├── admin_delete_authority.php
    ├── admin_create_event.php
    ├── admin_manage_event.php
    ├── admin_edit_event.php
    ├── admin_delete_event.php
    ├── admin_event_request.php
    ├── admin_event_details.php
    ├── admin_issues.php
    ├── admin_queries.php
    ├── admin_see_pages.php
    ├── admin_edit_pages.php
    └── admin_pass_change.php
```

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| **Backend** | PHP (Procedural) |
| **Database** | MySQL (via MySQLi) |
| **Frontend** | HTML5, Tailwind CSS v2 & v3, DaisyUI v4 |
| **Icons** | Font Awesome 6 |
| **Alerts** | SweetAlert / SweetAlert2 |
| **UI Framework** | Flowbite (Admin pages) |
| **Sessions** | PHP Native Sessions |

---

## 🗃️ Database Schema Overview

The application uses the following key tables:

| Table | Description |
|-------|-------------|
| `volunteer` | Volunteer accounts with points, badge, ban status |
| `club` | Club accounts |
| `authority` | Faculty/Varsity authority accounts |
| `admin` | Admin account |
| `event_details` | All events (pending/approved/declined) |
| `vol_participate_event` | Volunteer event registrations |
| `club_host_event` | Tracks which club hosts which event |
| `authority_host_event` | Tracks which authority hosts which event |
| `announcements` | Event announcements by clubs/authorities |
| `complain` | Complaints filed against volunteers |
| `badges` | Badge definitions (name, description, criteria) |
| `posts` | Volunteer social feed posts |
| `comments` | Comments on social posts |
| `query` | Public contact form submissions |
| `pages` | Editable CMS-style content pages |

---

## ⚙️ Installation & Setup

### Prerequisites
- PHP >= 7.4
- MySQL / MariaDB
- A local server: [XAMPP](https://www.apachefriends.org/) / [WAMP](https://www.wampserver.com/) / [Laragon](https://laragon.org/)

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/univol.git
   ```

2. **Move to your web server root**
   ```
   Copy the project folder to: htdocs/ (XAMPP) or www/ (WAMP)
   ```

3. **Create the database**
   - Open **phpMyAdmin**
   - Create a new database named `projecton`
   - Import the SQL dump file (if provided)

4. **Configure the database connection**

   Open `config/db_connect.php` and update if needed:
   ```php
   $conn = mysqli_connect('localhost', 'project', 'test123', 'projecton');
   ```

   | Parameter | Default Value |
   |-----------|---------------|
   | Host | `localhost` |
   | Username | `project` |
   | Password | `test123` |
   | Database | `projecton` |

5. **Start the server**
   - Start Apache and MySQL from XAMPP/WAMP control panel
   - Open your browser and navigate to:
     ```
     http://localhost/project/index.php
     ```

---

## 🔐 Default Login Info

> ⚠️ **Security Note:** Change all default credentials after your first login.

| Role | Login Field | Default Credentials |
|------|------------|---------------------|
| Admin | Username | Set in `admin` table |
| Volunteer | Student ID + Password | Registered via signup |
| Club | Email + Password | Registered via signup |
| Authority | Email + Password | Registered via signup |

---

## 🎯 Key Workflows

### Event Lifecycle
```
Club/Authority creates event
        ↓
Admin reviews event request (Approve / Decline)
        ↓
Approved event appears on Volunteer's "Upcoming Events"
        ↓
Volunteer registers (+10 points earned)
        ↓
Club/Authority can post announcements for the event
        ↓
Club/Authority can file complaints about a volunteer
        ↓
Admin reviews complaint and applies penalty if needed
```

### Badge Progression
```
Points 0–99    → 🟢 Newbie
Points 100–199 → 🥉 Bronze
Points 200–299 → 🥈 Silver
Points 300–399 → 🥇 Gold
Points 400–499 → ⚔️  Vanguard
Points 500+    → 💎 Elite
```

---

## 📸 Screenshots

> _Add screenshots of your application here_

| Page | Preview |
|------|---------|
| Landing Page | ![Landing](#) |
| Volunteer Dashboard | ![Volunteer Dashboard](#) |
| Admin Dashboard | ![Admin Dashboard](#) |
| Leaderboard | ![Leaderboard](#) |

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

## 👨‍💻 Authors

> _Add your team member names and GitHub profiles here_

- **Developer** — [@Nahin](https://github.com/Nahin197)
- **Developer** — [@Montasir](https://github.com/Irfanuzzaman-Montasir)
- **Developer** — [@Imran](https://github.com/imran-bhuiyan)

  

---

## 🙏 Acknowledgements

- [TailwindCSS](https://tailwindcss.com/)
- [DaisyUI](https://daisyui.com/)
- [Font Awesome](https://fontawesome.com/)
- [SweetAlert](https://sweetalert.js.org/)
- [Flowbite](https://flowbite.com/)

---


