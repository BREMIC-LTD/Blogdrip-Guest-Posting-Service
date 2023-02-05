# blogdrip-guest-posting-services

## Purpose
This Wordpress plug-in is made to help control your wordpress website through RESTful API

## How to use this plug-in
1. Install this plug-in to your wordpress site.
2. Open the plug-in setting for `Blogdrip Guest Posting Service` and put the BlogDrip token
3. To call any APIs, the caller need to pass the correct token in every request via header `x-authen-token`

## Prerequisite
1. You should have plug-in `Yoast SEO` to use full abilities of this plug-in during POSTING an article
2. You should have plug-in `Link Library` to use `bd/v1/link/...`

## How it works
1. endpoint: `bd/v1/upload` to upload media to the web
bd/v1/version
bd/v1/link/categories
bd/v1/link/submit
bd/v1/link/delete
bd/v1/link/categories
bd/v1/blog/categories
bd/v1/blog/submit
bd/v1/blog/delete
bd/v1/blog/url

## Description
Description: WordPress Web Service is used to access WordPress resources via WSDL and SOAP. After installation simply open http://yoursite.com/blog/index.php/sbws to test your plugin.

## Lisence
Copyright 2021 BREMIC Digital Services (email: servicedesk@bremic.co.th)

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