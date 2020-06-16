@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <tr>
      <th>
        <th>Name</th>
        <th>Mail</th>
        <th>Age</th>
      </th>
      @foreach ($items as $item)
        <tr>
          <td>{{ $item->name }}</td>
          <td>{{ $item->mail }}</td>
          <td>{{ $item->age }}</td>
        </tr>
      @endsection
    </tr>
  </table>
@endsection