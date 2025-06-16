*24/02/2025*


# Struktur File docker-compose.yml

```yml
version: '3'


    ports:
      - 80:80
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
      - ./src:/usr/share/nginx/html
```

Di mana bagian *ports* digunakan untuk menyambungkan ke port layanan yang ingin kita gunakan, kiri untuk OS dan kanan untuk Docker.

Bagian *volumes* digunakan untuk menentukan lokasi file yang akan kita gunakan untuk aplikasi yang dibuat, kiri untuk lokasi pada OS dan kanan untuk lokasi pada Docker.

# Struktur File nginx.conf
```nginx
server {
    listen 80;
    server_name localhost;

    root /usr/share/nginx/html;
    index index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
    }
}
```
Ini adalah layanan webserver oleh nginx yang akan digunakan untuk kofigurasi.

Bagian *listen* menyesuaikan *port* sebelah kiri yang ada pada file .yml.
## **Struktur file sementara**
```
.
├── analisa.md
├── catatan.md
└── code
    ├── docker-compose.yml
    ├── nginx
    │   └── nginx.conf
    └── src
        ├── div.html
        └── index.html
```

# HTML
Hypertext Markup Language merupakan bahasa markup yang biasa digunakan untuk membangun website.
### Struktur dasar isi file HTML
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 - Sample HTML</title>
</head>
<body>

</body>
</html>
```


### Beberapa Tag HTML
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 - Full TAG HTML</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="container">
        <h1>Main Heading (h1)</h1>
        <h2>Sub Heading (h2)</h2>
        <h3>Sub-sub Heading (h3)</h3>
        <h4>Sub-sub-sub Heading (h4)</h4>
        <h5>Sub-sub-sub-sub Heading (h5)</h5>
        <h6>Sub-sub-sub-sub-sub Heading (h6)</h6>

        <p>This is a paragraph of text. It provides a brief description or explanation. Notice how it is styled using the CSS file.</p>

        <img src="/assets/logo-esa-unggul.png" alt="Sample Image" class="sample-image">

        <form id="contact-form" action="#" method="post" onsubmit="handleSubmit(event)">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Submit</button>
        </form>

        <div>
            <p>This is a <a href="https://www.esaunggul.ac.id">link</a> Website Esa Unggul.</p>
        </div>

        <ul class="sample-list">
            <li>List Item 1</li>
            <li>List Item 2</li>
            <li>List Item 3</li>
            <li>List Item 4</li>
        </ul>

        <div id="response-message">
            <h2>Thank you for your submission!</h2>
            <p>We have received your message and will get back to you soon.</p>
        </div>
    </div>
</body>
<script>
    function handleSubmit(event) {
        event.preventDefault();
        const responseMessage = document.getElementById('response-message');
        responseMessage.style.display = 'block';
        document.getElementById('contact-form').reset();
    }
</script>
</html>
```