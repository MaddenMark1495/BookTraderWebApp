# BookTraderWebApp

## Inspiration
We are poor and other people are poor too. We want to save money on textbooks.

## What it does
Connects you with people around your school, who are most likely taking very similar classes and using very similar books, and streamlines the process of posting listings and buying used books.

## How we built it
The application relies on an RESTful API built in PHP communicating with a MySQL database to manage users, listings, books, schools, etc. We built an iPhone application that allows a user to login/register, view listings in their area, and post listings. The iPhone application also incorporates a library to read barcodes and then takes the resultant ISBN to query an API and gather a bunch of information about the book that the average college student would probably think too much a hassle to enter manually. There is also an application built in HTML,Javascript that mirrors most of the functionality of the mobile application.

## Challenges 
we ran into Many of the libraries I was using were written in Objective-c which made integrating them into a Swift 3 project insanely headache inducing. We also had a few issues tracking down bugs in the PHP API. The web developers on our team found the barcode reading components to be much more finicky when implemented on the desktop. We also had very lazy, entitled interns. Typical millenials.

## Accomplishments that we're proud of
Personally, I was very proud of the barcode reading technology I implemented on the iPhone and integrating that with online APIs to pull down information. Mark says he's just proud of himself in general. Now's not really a good time to ask us though, the lack of sleep has left us all a bit apathetic. The interns have no right to be proud of anything.

## What we learned
We learned about Google's Map API, more about Swift and iOS development, and some barcode scanning API stuff.
