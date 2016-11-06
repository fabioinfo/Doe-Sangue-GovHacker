this code (for web)

this code (for web)
<pre>
    
<? echo "am;"?>
 Groot

</pre>


Generates the next result:
    I
    amGroot
instead of 
    I
    am
    Groot
The last tag "?>" deletes the end of the line.

However, if we changed the line
    <? echo "am"; ?>
by
    <? echo "am"; ?>.  (or  a space)
then the result is :
    I
    am.
    Groot