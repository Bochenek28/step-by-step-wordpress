# Step by Step WordPress

Lokalny stack Docker dla projektu strony WordPress.

## Uruchomienie

```powershell
docker compose up -d
```

WordPress:

```text
http://localhost:8080
```

## Dane bazy

```text
Host: db
Baza: step_by_step
Uzytkownik: step_by_step
Haslo: step_by_step_password
Root password: step_by_step_root_password
```

## Zatrzymanie

```powershell
docker compose down
```

Zatrzymanie z usunieciem bazy:

```powershell
docker compose down -v
```

## WP-CLI

```powershell
docker compose --profile tools run --rm wpcli wp --info
```
