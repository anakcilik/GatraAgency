# Architecture

GatraAgency terdiri dari public website dan authenticated application. Role: SUPER_ADMIN, ADMIN, PROJECT_MANAGER, STAFF, CLIENT, INVESTOR. Modul utama: CRM, client portal, staff workspace, project management, deliverable evidence, approval/revision, finance, investor aggregate analytics, AI service layer, audit log.

Versi lokal memakai PHP session agar langsung berjalan di XAMPP. Versi production disarankan memakai Next.js, TypeScript, PostgreSQL, Prisma, Tailwind CSS, dan Auth.js/session server-side.
