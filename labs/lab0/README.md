# Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Mahitha Kalaga

**Email**: [kalagam1@udayton.edu](kalagam1@udayton.edu)

![Mahitha's headshot](../../images/mahi.jpeg)

## Repository Information

Repository's URL: [https://github.com/kalagam1/waph-kalagam1.git](https://github.com/kalagam1/waph-kalagam1.git)

This is a private repository for Mahitha Kalaga to store all code from the course. The organization of this repository is as follows.

### Labs

[Hands-on exercises in Lectures](labs)

- [Lab 0](labs/lab0): Development Environment Setup
- [Lab 1](labs/lab1): Foundations of the Web
- [Lab 2](labs/lab2): Front-end Web Development

### Hackathons

- [Hackathon 1](hackathon1): Cross-site Scripting Attacks and Defenses

## Report

## The lab's overview

This lab focused on setting up the development environment for WAPH. In Part I, I installed Ubuntu 22.04 in VirtualBox and configured the system with essential packages. In Part II, I cloned both the public course repository and my private GitHub repository, and completed git-related tasks.

Lab's URL: [Lab0](https://github.com/kalagam1/waph-kalagam1/tree/main/labs/lab0)

## Part 1 -  Ubuntu Virtual Machine & Software Installation

Created a new VirtualBox VM using the Ubuntu 22.04 ISO and allocated 4 GB RAM and 2 CPUs. After the OS was installed, I set up the following:

- Installed system updates
- Installed Apache2, Git, and Sublime Text
- Installed Google Chrome manually via .deb package
- Installed Wireshark and configured non-root access

### Apache Web Server Testing

![Apache Web Server in my Ubuntu VM](../../images/2.jpeg)

![Apache Web Server in my laptop browser](../../images/1.jpeg)

## Part 2 - git Repositories and Exercises

I created a private GitHub repository named waph-mahitha and shared it with the instructor by adding waph-phung as a collaborator. The repository is available at

### The course repository

Repository's URL: [https://github.com/kalagam1/waph-kalagam1.git](https://github.com/kalagam1/waph-kalagam1.git)

![Course Repository](../../images/3.jpeg)

### Private Repository

To enable secure access, I generated an SSH key pair on my Ubuntu VM and added the public key to my GitHub account. This allowed me to clone the repository via SSH without needing a password.

After cloning, I created the labs/lab0/ directory, added the lab report in README.md, and included my headshot image using a relative path. I then committed the changes and pushed them to GitHub.

Below is a screenshot showing the successful git commit and git push from my VM:

![Changes Commited](../../images/4.jpeg)



