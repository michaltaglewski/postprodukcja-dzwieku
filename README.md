# Postprodukcja dźwięku

> See demo version at https://postprodukcjadzwieku.web-zone.pl/

## Development

1. Clone the repository:
```bash
git clone https://github.com/michaltaglewski/postprodukcja-dzwieku.git
```

2. Copy the environment configuration:
```bash
cp .env.example .env
```

3. Start Docker containers:

```bash
docker compose -p postprodukcja-dzwieku up -d --build
```

The site will be available at http://localhost:8080