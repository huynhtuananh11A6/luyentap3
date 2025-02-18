<?php
// Tạo danh sách sinh viên
$students = [
    [
        'name' => 'Nguyễn Văn A',
        'dob' => '2000-01-01',
        'gender' => 'Nam',
        'math' => 7.5,
        'literature' => 8.0,
        'english' => 6.5
    ],
    [
        'name' => 'Trần Thị B',
        'dob' => '1999-03-15',
        'gender' => 'Nữ',
        'math' => 8.0,
        'literature' => 7.0,
        'english' => 8.5
    ],
    // Thêm 18 sinh viên khác tại đây...
    [
        'name' => 'Nguyễn Thị C',
        'dob' => '2001-06-10',
        'gender' => 'Nữ',
        'math' => 9.0,
        'literature' => 7.5,
        'english' => 8.0
    ],
    [
        'name' => 'Lê Quang D',
        'dob' => '1998-11-20',
        'gender' => 'Nam',
        'math' => 6.5,
        'literature' => 6.5,
        'english' => 7.5
    ],
    // Các sinh viên còn lại sẽ được thêm ở đây.
];

// Thêm điểm trung bình cho mỗi sinh viên
foreach ($students as &$student) {
    $student['average'] = ($student['math'] + $student['literature'] + $student['english']) / 3;
}

// Hàm sắp xếp sinh viên theo tên
function sortStudentsByName($students) {
    usort($students, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    return $students;
}

// Hàm trả về mảng các bạn nữ
function getFemaleStudents($students) {
    return array_filter($students, function($student) {
        return $student['gender'] === 'Nữ';
    });
}

// Hàm trả về mảng các sinh viên có điểm TB >= 8.0
function getHighAchievers($students) {
    return array_filter($students, function($student) {
        return $student['average'] >= 8.0;
    });
}

// Hàm sắp xếp sinh viên theo điểm trung bình
function sortStudentsByAverage($students) {
    usort($students, function($a, $b) {
        return $b['average'] <=> $a['average']; // Sắp xếp theo điểm trung bình giảm dần
    });
    return $students;
}

// Hàm tìm bạn nữ có điểm TB cao nhất
function getTopFemaleStudent($students) {
    $femaleStudents = getFemaleStudents($students);
    usort($femaleStudents, function($a, $b) {
        return $b['average'] <=> $a['average'];
    });
    return $femaleStudents[0]; // Trả về bạn nữ có điểm TB cao nhất
}

// 1. Sắp xếp và in ra danh sách sinh viên theo tên
$students = sortStudentsByName($students);
echo "Danh sách sinh viên sắp xếp theo tên:\n";
print_r($students);

// 2. In danh sách sinh viên nữ
$femaleStudents = getFemaleStudents($students);
echo "\nDanh sách sinh viên nữ:\n";
print_r($femaleStudents);

// 3. In danh sách sinh viên có điểm TB >= 8.0
$highAchievers = getHighAchievers($students);
echo "\nDanh sách sinh viên có điểm TB >= 8.0:\n";
print_r($highAchievers);

// 4. Sắp xếp sinh viên theo điểm TB và in ra kết quả
$students = sortStudentsByAverage($students);
echo "\nDanh sách sinh viên sắp xếp theo điểm TB:\n";
print_r($students);

// 5. Tìm bạn nữ có điểm TB cao nhất và in ra
$topFemaleStudent = getTopFemaleStudent($students);
echo "\nBạn nữ có điểm TB cao nhất:\n";
print_r($topFemaleStudent);
?>
