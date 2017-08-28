sso_idp
=======

A Symfony project created on August 28, 2017, 2:37 pm.

Implementaion of Korotovskii's SSO solution for Symfony.

#Article

https://www.korotovsky.io/2015/08/16/a-quick-way-to-build-single-sign-on-authentication-in-symfony2/

#Code

https://github.com/korotovsky/SingleSignOnIdentityProviderBundle

#Tests

    http://sso_sp.com
    
redirects to :
    
    http://sso_idp.com/sso/login/?_failure_path=http%3A%2F%2Fsso_idp.com%2Flogin%3F_target_path%3Dhttp%253A%252F%252Fsso_sp.com%252F%253F_hash%253DttPs2J9pbQNgpfUYnxo3Ck5gA6%25252FQALXI55VpPifB3rs%25253D&_target_path=http%3A%2F%2Fsso_sp.com%2Fotp%2Fvalidate%2F%3F_target_path%3Dhttp%253A%252F%252Fsso_sp.com%252F%253F_hash%253DttPs2J9pbQNgpfUYnxo3Ck5gA6%25252FQALXI55VpPifB3rs%25253D&service=consumer1&_hash=MeNs3iqXbuI72lc6sxYXmbz9zFX3NvJMK%2BocvFfwkdA%3D
    
= 400 Bad Request

