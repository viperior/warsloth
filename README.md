# warsloth
Patriot Games Web Assets Repo for the Web Ops Team of Capstone, Inc.

This project was created for educational purposes and was used in the 2017 Cyber Patriot Games (CPG) at UT Tyler.

## Design Goals

The design goals of the project were to create a set of websites with a variety of features that could be susceptible to hacking. Best practices in security were in many places ignored or outright opposed. This created the opportunity for CPG participants to identify and exploit these vulnerabilities. They also had the ability to harden their own websites, patching some of the glaring security holes.

## Site Features

The features of the sites include:
- username / password login system
- 4-digit pin code login system
- review system
- file upload feature
- search functionality that queried the database

## Vulnerabilities

Some of the vulnerabilities of each system are identified below. There are many more possible that are not listed.

### Username / Password Login System

Possible exploits:
- SQL injection
- Brute force attacks

### 4-Digit PIN Code Login System

Possible exploits:
- Browser inspector code modification
- Reverse engineering of hashing system to decode pin hashes
- Brute force attacks

### Review System

Possible exploits:
- SQL injection
- JavaScript code injection
- XSS attacks

### File Upload Feature

Possible exploits:
- Overwriting of site files to vandalize or deliver malicious payloads

### Search functionality

Possible exploits:
- SQL injection
