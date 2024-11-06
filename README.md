# shopify-product-list-app
This app will show all products

## Steps:
### 1. Install `laravel-shopify` package
Package used - https://github.com/Kyon147/laravel-shopify
### 2. Configure Shopify Apps
Set environment variables such as shopify client id, client secret and related configuration as per package documentations.
### 3. Setup database
Setup database name, username, password and run migration
### 4. Tunneling
Tunneling between a local domain and port with `ngrok` public domain and port 80.<br>
<b> Command </b> : `ngrok http --url <NGROK_DOMAIN> <LOCAL_DOMAIN>:<LOCAL_PORT>`
### 5. Setup authentication redirect url
The redirect url `<NGROK_DOMAIN>/authenticate` should be put in the app at partners account (as per package doc)
### 6. Add routes

## Screenshots:
### Product List Page<br>
![image](https://github.com/user-attachments/assets/09215653-4c9d-4fe0-95c5-78dbb2fd87b3)
### Shop Page<br>
![image](https://github.com/user-attachments/assets/7182aa53-60eb-4eac-b5d7-bd98c64f48ef)



