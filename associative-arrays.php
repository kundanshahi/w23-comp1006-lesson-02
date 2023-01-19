<?php

  $student_info_keys = [
    'name',
    'age',
    'dob'
  ];

  $students = [
    ['Kundan', 20, '2003-12-05'],
    ['1997-02-01', 'Gagandeep', 26]
  ];

  $aa_students = [
    [
      "name" => "Kundan Shahi",
      "age" => 20,
      "dob" => "2003-12-05"
    ],
    [
        "name" => "Ram",
        "age" => 22,
        "dob" => "2001-01-18"
    ]
  ];

  foreach ($aa_students as $student) {
    echo $student["age"];
  }