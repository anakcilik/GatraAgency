# Database Proposal

Production database: PostgreSQL. Tabel inti: users, roles, permissions, companies, clients, leads, services, packages, package_features, projects, project_members, milestones, tasks, deliverables, evidence, revisions, approvals, messages, notifications, quotes, invoices, payments, expenses, files, activity_logs, audit_logs, investors.

Aturan: simpan password_hash, uang sebagai integer minor unit, index foreign key/status/timestamp, soft delete untuk data bisnis, audit untuk aksi sensitif.
