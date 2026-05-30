from django.contrib import messages
from django.shortcuts import render, redirect, get_object_or_404

from .models import Student, StudentProfile


# Create your views here.

# Home Page
def index(request):
    students = Student.objects.all()

    return render(request, 'index.html', {
        'students': students
    })

# Add Student Page
def add_student(request):
    if request.method == 'POST':

        # Get Form Data
        name = request.POST.get('name')
        email = request.POST.get('email')
        dob = request.POST.get('dob')
        gender = request.POST.get('gender')
        course = request.POST.get('course')
        address = request.POST.get('address')

        # Checkbox Multiple Values
        hobbies = request.POST.getlist('hobbies')
        hobbies_str = ", ".join(hobbies)

        # Save Data
        Student.objects.create(
            name=name,
            email=email,
            dob=dob,
            gender=gender,
            course=course,
            hobbies=hobbies_str,
            address=address
        )

        return redirect('/')
    return render(request, 'add_student.html')

# Edit Student
def edit_student(request, id):

    # Student Find
    student = get_object_or_404(Student, id=id)

    # Form Submit
    if request.method == 'POST':

        student.name = request.POST.get('name')
        student.email = request.POST.get('email')
        student.dob = request.POST.get('dob')
        student.gender = request.POST.get('gender')
        student.course = request.POST.get('course')
        student.address = request.POST.get('address')

        hobbies = request.POST.getlist('hobbies')
        student.hobbies = ",".join(hobbies)

        # Save Updated Data
        student.save()

        messages.success(
            request,
            "Student Updated Successfully!"
        )

        return redirect('index')

    student_hobbies = [h.strip() for h in student.hobbies.split(',')]

    context = {
        'student': student,
        'is_reading': 'Reading' in student_hobbies,
        'is_coding': 'Coding' in student_hobbies,
        'is_gaming': 'Gaming' in student_hobbies,
        'is_traveling': 'Traveling' in student_hobbies,
    }

    return render(request,
                  'edit_student.html',
                  context)

# Delete Student
def delete_student(request, id):

    student = get_object_or_404(Student, id=id)

    student.delete()

    messages.success(
        request,
        'Student Deleted Successfully!'
    )

    return redirect('index')

# -------------------------------------------------------------------

# Student Profile
def student_profile(request):
    profiles = StudentProfile.objects.select_related('student').all()

    return render(
        request,
        'student_profile.html',
        {
            'profiles': profiles
        }
    )

# Add Student Profile
def add_student_profile(request):

    students = Student.objects.all()

    if request.method == "POST":

        student_id = request.POST.get('student_id')

        profile = request.FILES.get('profile')

        description = request.POST.get('description')

        student = Student.objects.get(id=student_id)

        StudentProfile.objects.create(
            student=student,
            profile=profile,
            description=description,
        )

        messages.success(
            request,
            "Student Profile Added Successfully!"
        )

        return redirect('student_profile')

    return render(
        request,
        'add_student_profile.html',
        {
            'students': students
        }
    )

# Edit Student Profile
def edit_student_profile(request, id):

    profile = get_object_or_404(
        StudentProfile,
        id=id
    )

    students = Student.objects.all()

    if request.method == "POST":

        student_id = request.POST.get('student_id')

        description = request.POST.get('description')

        image = request.FILES.get('profile')

        profile.student = Student.objects.get(
            id=student_id
        )

        profile.description = description

        # image only if uploaded
        if image:
            profile.profile = image

        profile.save()

        messages.success(
            request,
            "Student Profile Updated Successfully!"
        )

        return redirect('student_profile')

    return render(
        request,
        'edit_student_profile.html',
        {
            'profile': profile,
            'students': students
        }
    )

# Delete Student Profile
def delete_student_profile(request, id):

    profile = get_object_or_404(
        StudentProfile,
        id=id
    )

    if request.method == "POST":

        # Image file bhi delete karni ho to
        if profile.profile:
            profile.profile.delete(save=False)

        profile.delete()

        messages.success(
            request,
            "Student Profile Deleted Successfully!"
        )

    return redirect('student_profile')
