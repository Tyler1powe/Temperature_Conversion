                                      
            <?
   //input
   $name = $_POST['name'];
   
   $exam1 = $_POST['exam1'];
   $exam2 = $_POST['exam2'];
   $exam3 = $_POST['exam3'];
   
   $homework1 = $_POST['homework1'];
   $homework2 = $_POST['homework2'];
   $homework3 = $_POST['homework3'];
   $homework4 = $_POST['homework4'];
   $homework5 = $_POST['homework5'];
      
      //process
      $exam_average = ($exam1+$exam2+$exam3)/3;
      $homework_average = ($homework1+$homework2+$homework3+$homework4+$homework5)/5;
      $final_average = ($exam_average*0.85)+($homework_average*0.15);
       
    print" <h1> Homework 3 - Grade report for $name </h1>
            <h2> Your final average is: ".number_format($final_average,2)." </h2>
            Exam Average: ".number_format($exam_average,2)."  <br>
            Homework Average: ".number_format($homework_average,2)."
    "
              ?>