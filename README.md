# cakeblog

localhost:4000

(localhost wouldn't work on my machine, and i had to use the docker ip as the address 192.168.99.100:4000)


site users:
```
username: blogadmin
password: password
level: admin
```
```
username: poster1
password: password
level: regular user
```
```
username: poster2
password: password
level: regular user
```
```
username: poster3
password: password
level: regular user
```

any regular user can start a post, and save the post as a draft or to be submitted for review. tags are optional.

once a post has been submitted for review, the admin user has an "unpublished posts" tab they can view, and on the details view of the blog post, they can choose whether the post is published or not. the admin can also see this option on already published posts if they wish to unpublish one that has already been published.

if a post has been submitted as a draft by a user, it will appear under the "my drafts" tab, which only regular user accounts can see. only drafts made by the logged in account will appear here.

a tag can be clicked on in the "published posts" tab, which will pull all other blog posts tagged with the same thing.
