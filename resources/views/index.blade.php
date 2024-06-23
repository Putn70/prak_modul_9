<tbody>
    @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->age }}</td>
            <td>{{ $employee->position->name }}</td>
            <td>
                {{-- ACTIONS SECTION --}}
                <div class="d-flex">
                    <a href="{{ route('employees.show', ['employee' => $employee->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                    <a href="{{ route('employees.edit', ['employee' => $employee->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                    <div>
                        <form action="{{ route('employees.destroy', ['employee' => $employee->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
