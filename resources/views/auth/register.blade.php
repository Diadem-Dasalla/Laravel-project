<!DOCTYPE html>

<div class="form-group">
    <label for="role">Register as:</label>
    <select name="role" id="role" class="form-control">
        <option value="user">User</option>
        <option value="author">Author</option>
        @if (auth()->check() && auth()->user()->role === 'admin')
            <option value="admin">Admin</option>
        @endif
    </select>
</div>

