# ex-task
Hello Expedia team.. I wrote this task using PHP language، because I learned It and it the most language I have dealt with and written out many tasks and projects during my work. Php language it gives more flexibility than C, C++, and ASP and overall helps in improving traffic to the website. To develop complex, dynamic and user-friendly web applications. I want to learn more and more and all new about this language, It helps to build a website in an easy, fun, smooth and uncomplicated way.


call web api using php:
In this Task I used PHP Language to call web API.
Here I will explain the code line by line...

in line 13:
copy the URL of the Web API of destinationName and store the URL in variable ($url).

in line 14 :
create an object of the function (curl_init) to call a remote url for ($url) and stored in ($c).

in line 15:
used (curl_setopt) function and put inside this function ($c and CURLOPT_RETURNTRANSFER and the value of 1),this line means this api will
retrieve data using the object ($c).

in line 16 & 17:
This option determines whether curl verifies the authenticity of the peer's certificate. A value of 1 means curl verifies; 0 (zero) means it doesn't.

in line 18:
define variable ($j) to store data and returning JSON format.

in line 19:
using json_decode for the ($j variable) to convert this JSON to array.

in line 21 to 28:
we need to print the Hotel and offers of this array using (for loop), So I print the hotelInfo and hotelName
then print destination and longName, the print hotelPricingInfo and averagePriceValue.


Things I learned during this Task:
Through research I learned new function like (CURLOPT_SSL_VERIFYPEER).
Honestly, I heared about github website, But there was no chance to deal with this site, Fortunately through these Task I learned how to add new repository and 
Push my projects using (cmd), and more things.

Problems I have encountered:
I encountered many problems with heroku website, So Im so sorry for not creating host on this website, But I Push the code, so you can execute this by copying it in one 
of text editors.
I hope you do not take that problem seriously, And I will try to find a solution to the problem I have encountered.
Thanks Expedia team, and thanks for giving me this opportunity. I Hope to be good as you expect me to be.
