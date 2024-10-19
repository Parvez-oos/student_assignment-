<?php

function calculateResult($marks) {
    foreach ($marks as $mark) {
        if ($mark <0 && $mark >100){
            return "Mark rang is invalid.";
        }
    }
     
    if (min($marks) <33) {
        return "The student has failed.";
    }

    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);
    $grade = '';


    switch (true) {
        case ($averageMarks <= 100 && $averageMarks >= 80):
            $grade = 'A+';
            break;
            case ($averageMarks <= 80 && $averageMarks >= 70):
                $grade = 'A';
                break;
                case ($averageMarks <= 70 && $averageMarks >= 60):
                    $grade = 'A-';
                    break;
                    case ($averageMarks <= 60 && $averageMarks >= 50):
                        $grade = 'B';
                        break;
                        case ($averageMarks <= 50 && $averageMarks >= 40):
                            $grade = 'C';
                            break;
                            case ($averageMarks <= 40 && $averageMarks >= 33):
                                $grade = 'D';
                                break;

                                default:
                                $grade = 'F';

    }

    return " Total Marks: $totalMarks,
             Average Marks: $averageMarks,
             Grade: $grade";
}

// Exemple Uses
$marks = [82, 75, 93, 78, 87];
echo calculateResult($marks);

?>