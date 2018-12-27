# Contacts app 

This project serves as a demostration and tutorial for how to get started developing an internet connected app with Android and PHP. 


## Server
Lightweight REST API for managing contacts implemented in PHP. No DBMS or auth for initial version. Served from local machine to the client over the local network.  


## Client
Android CRUD app for managing contacts. Syncs with server.


## REST API (v0)

### Welcome
URL: `/`

Response 

```
{
	"message": "Welcome to the Contact manager API"
}
```

### Types

#### People

* Index URL: GET `/people/`
* GET/PUT/DELETE URL:  `/people/{id}`
* CREATE URL: `/people`

Attributes:

* name
* email
* phone number


