# Disable the WordPress REST API
install this plugin to remove access to the REST API in a WordPress installation. 

## Endpoint location for testing
To test this plugin, enter your url, followed by
`/wp-json/v2/posts`

You should receive an error 
**Access Denied**

`{"code":"access denied","message":"REST API Disabled","data":{"status":403}}`
