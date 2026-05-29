# 🚀 Laravel Developer Portfolio

Modern Developer Portfolio Website built with Laravel, Filament v3, Livewire, Blade, MariaDB, and Docker.

This project provides a dynamic portfolio system where all content can be managed directly from the admin panel using Filament v3.

---

# ✨ Features

- Dynamic Portfolio Projects
- Dynamic Skills Section
- Dynamic Profile & About Section
- Contact Form System
- Admin Panel using Filament v3
- Responsive Modern UI
- Docker Development Environment
- Laravel + Livewire Architecture
- MariaDB Database
- Image Upload Support
- GitHub & Social Links Integration

---

# 🛠 Tech Stack

| Technology | Usage |
|---|---|
| Laravel | Backend Framework |
| Filament v3 | Admin Panel |
| Livewire | Reactive Components |
| Blade | Frontend Templating |
| MariaDB | Database |
| Docker | Development Environment |
| Nginx | Web Server |

---

# 📦 Installation

Clone repository:

```bash
git clone https://github.com/USERNAME/REPOSITORY.git
```

Masuk ke project:

```bash
cd REPOSITORY
```

Copy environment:

```bash
cp .env.example .env
```

Jalankan docker:

```bash
dcu
```

Generate app key:

```bash
dca key:generate
```

Run migration:

```bash
dca migrate
```

Storage link:

```bash
dca storage:link
```

---

# ⚙️ Default Commands

Custom docker commands used in this project:

| Command | Description |
|---|---|
| `dcu` | docker compose up |
| `dcd` | docker compose down |
| `dca` | php artisan |
| `dcm` | make model, migration, seeder, controller, filament resource |

---

# 🗂 Database Structure

Main tables:

- profiles
- projects
- skills
- contacts

---

# 🖼 Admin Panel

Access admin panel:

```txt
/admin
```

Manage:

- Profile
- Projects
- Skills
- Contact Messages

---

# 📬 Contact Form

Visitor messages are stored automatically into database table:

```txt
contacts
```

---

# 📁 Folder Structure

```txt
app/
resources/
routes/
public/
database/
docker/
```

---

# 🔥 Dynamic Portfolio Content

Everything can be edited from Filament Admin Panel:

- Portfolio Projects
- About Me
- Skills
- Social Media
- Contact Information

No hardcoded content needed.

---

# 👨‍💻 Developer

Rio Darmawanto

- Laravel Developer
- Filament v3 Enthusiast
- Information Systems Student

---

# 📄 License

This project is open-source and available for learning purposes.