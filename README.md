**RESTful CRUD API-v1**
----
 GET_COURSES returns json data about courses.

* **URL**

  /courses/

* **Method:**

  `GET`
  
*  **URL Params** [None]

* **Data Params** [None]

* **Success Response:**

  * **Code:** 200 <br />
```json
{
  "data": [
    {
      "id": 1,
      "title": "Assumenda eos hic a",
      "description": "Facilis earum saepe eos iusto accusamus veniam.",
      "status": "Pending",
      "is_premium": 1,
      "created_at": "2022-02-22T20:39:03.000000Z",
      "updated_at": "2022-02-22T20:39:03.000000Z"
    },
    {
      "id": 2,
      "title": "Explicabo autem magni et nisi",
      "description": "Alias amet explicabo amet. Quo delectus ut rerum molestias quis beatae.",
      "status": "Pending",
      "is_premium": 0,
      "created_at": "2022-02-22T20:39:03.000000Z",
      "updated_at": "2022-02-22T20:39:03.000000Z"
    }
  ]
}
```
* **Sample Call:**
```code
curl --location --request GET 'http://{host}:{port}/api/courses'
```


--------
  GET_COURSE returns json data about a single course.

* **URL**

  /courses/:id

* **Method:**

  `GET`
  
*  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Data Params** [None]

* **Success Response:**

  * **Code:** 200 <br />
  
```json
{
  "data": {
    "id": 1,
    "title": "Assumenda eos hic ",
    "description": "Facilis earum saepe eos iusto accusamus veniam.",
    "status": "Pending",
    "is_premium": 1,
    "created_at": "2022-02-22T20:39:03.000000Z",
    "updated_at": "2022-02-22T20:39:03.000000Z"
  }
}
```
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />

* **Sample Call:**
```code
curl --location --request GET 'http://{host}:{port}/api/courses/{id}'
```
----
  CREATE_NEW_COURSE creates new course.

* **URL**

  /courses/

* **Method:**

  `POST`
  
*  **URL Params** [None]

* **Data Params**
```json
{
  "title": "Voluptate asperiores",
  "description": "Eveniet voluptas eos a consequuntur asperiores.",
  "status": "Published",
  "is_premium": 1
}
```

* **Success Response:**

  * **Code:** 201 <br />
  
```json
{
    "data": {
         "title": "Voluptate asperiores",
         "description": "Eveniet voluptas eos a consequuntur asperiores.",
         "status": "Published",
         "is_premium": 1,
        "updated_at": "2022-02-23T18:25:49.000000Z",
        "created_at": "2022-02-23T18:25:49.000000Z",
        "id": 53
    }
}
```
 
* **Error Response:**

  * **Code:** 400 BAD REQUEST <br />

* **Sample Call:**
```code
curl --location --request POST 'http://{host}:{port}/api/courses/' \
--header 'Content-Type: application/json' \
--data-raw '{
  "title": "Voluptate asperiores",
  "description": "Eveniet voluptas eos a consequuntur asperiores.",
  "status": "Published",
  "is_premium": 1
}'
```
--------

 UPDATE_COURSE updates existing course.

* **URL**

  /courses/:id

* **Method:**

  `PUT`
  
   **Required:**
 
   `id=[integer]`

* **Data Params**
```json
{
  "title": "Voluptate asperiores",
  "description": "Eveniet voluptas eos a consequuntur asperiores.",
  "status": "Published",
  "is_premium": 1
}
```

* **Success Response:**

  * **Code:** 200 <br />
  
```json
{
    "data": {
         "title": "Voluptate asperiores",
         "description": "Eveniet voluptas eos a consequuntur asperiores.",
         "status": "Published",
         "is_premium": 1,
        "updated_at": "2022-02-23T18:25:49.000000Z",
        "created_at": "2022-02-23T18:25:49.000000Z",
        "id": 53
    }
}
```
  * **Error Response:**

  * **Code:** 404 NOT FOUND <br />

* **Sample Call:**
```code
curl --location --request PUT 'http://{host}:{port}/api/courses/{id}' \
--header 'Content-Type: application/json' \
--data-raw '{
  "title": "Voluptate asperiores",
  "description": "Eveniet voluptas eos a consequuntur asperiores.",
  "status": "Published",
  "is_premium": 1
}'
```

--------

 DELETE_COURSE deletes existing course

* **URL**

  /courses/{id}

* **Method:**

  `DELETE`
  
* **URL Params** [None]

* **Data Params** [None]

* **Success Response:**

* **Code:** 204 <br />
  
```json
{
    "data": 1
}
```
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />

* **Sample Call:**
```code
curl --location --request DELETE 'http://{host}:{port}/api/courses/7'
```
