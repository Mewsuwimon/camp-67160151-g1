@extends('template.default')

@section('title','Result')
@section('content')

<h2>ข้อมูลที่รับมาจาก Workshop #HTML - FORM</h2>

<ul>
    <li>ชื่อ: {{ $data['fname'] ?? '-' }}</li>
    <li>สกุล: {{ $data['lname'] ?? '-' }}</li>
    <li>วัน/เดือน/ปีเกิด: {{ $data['bdate'] ?? '-' }}</li>
    <li>อายุ: {{ $data['age'] ?? '-' }}</li>
    <li>เพศ: {{ $data['gender'] ?? '-' }}</li>
    <li>ที่อยู่: {{ $data['address'] ?? '-' }}</li>
    <li>สีที่ชอบ: {{ $data['color'] ?? '-' }}</li>
    <li>แนวเพลงที่ชอบ: {{ $data['music'] ?? '-' }}</li>
</ul>

@endsection
