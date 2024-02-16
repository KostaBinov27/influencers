
# Data Scraper

- The code for the template file can be found in wp-content/themes/understrap-child-main/page-templates/scraped-data-template.php

- The JS code can be found in wp-content/themes/understrap-child-main/src/js/custom-javascript.js

- The open free API used for this project is https://dummyjson.com/

- The listings are users and their posts if you click on the more detals.

- To test this page, please pull the repo, modify the database credentials in wp-config.php file, create new page and choose the template named "Scraped data - Homepage". The listings should be shown. 


## API Reference

#### Get all users

```http
  GET /users
```

#### Get user

```http
  GET /users/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of item to fetch |

#### getUserData(num1)

Takes the ID of the user and returns the object of the user.

#### Get posts

```http
  GET /posts
```

#### filter(item)

Takes all posts and return the posts that are matching with the userId.
