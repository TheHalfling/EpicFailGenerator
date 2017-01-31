# Epic Fail Generator

## Objective
Create a php based webform that would generator a specified number of Epic Fail Descriptions.
These would then be displayed in a table on the webpage.  This original version of this list came 
from a post on the site [Darths & Droids](http://www.darthsanddroids.net/) . Here is a link to the 
originating post: [Darth & Droids: Episode 1459 ](http://www.darthsanddroids.net/episodes/1459.html)

## Strategy
Use an array to capture the two lists of words, randomize them and then produce results in a table.
Once complete this will go on my blog.

## Process
* Set some basic CSS code to control the look of the data table of results.
* Since all of the Epic Fail Descriptions are made of two words, create two arrays to house the text.
* Randomize the order of the items in each array
* Get input from the user on number of results to display (between 1 and 10)
* For each item to display show the array value for that item minus one using a while loop

## Results
Achieved an interactive webform that generates the expected results.
