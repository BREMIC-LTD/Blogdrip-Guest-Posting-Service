# blogdrip-guest-posting-services

## Purpose
This Wordpress plug-in is made to publish and manage your guest posts and text links for multiple websites from 1 dashboard at https://my.blogdrip.com, website owners are able to make multiple accounts for staff or external writers.

## How to use this plug-in
1. Install this plug-in to your wordpress site.
2. Open the plug-in setting for `Blogdrip Guest Posting Service` and put the BlogDrip token
3. To call any APIs, the caller need to pass the correct token in every request via header `x-authen-token`

## Prerequisite
1. You should have plug-in `Yoast SEO` to use full abilities of this plug-in during POSTING an article
2. You should have plug-in `Link Library` to use `bd/v1/link/...`

## How it works
1. endpoint: `bd/v1/upload` to upload media to the web
1. endpoint: `bd/v1/version` to get current plug-in version
1. endpoint: `bd/v1/link/categories` to get all exists link's categories
1. endpoint: `bd/v1/link/submit` to submit link
1. endpoint: `bd/v1/link/delete` to delete link
1. endpoint: `bd/v1/link/categories` to 
1. endpoint: `bd/v1/blog/categories` to get all exists blog's categories
1. endpoint: `bd/v1/blog/submit` to submit blog/post
1. endpoint: `bd/v1/blog/delete` to delete blog/post
1. endpoint: `bd/v1/blog/url` to get private url from post_id

## Licence
Copyright 2021 BLOGDRIP (email: servicedesk@blogdrip.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 3, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
