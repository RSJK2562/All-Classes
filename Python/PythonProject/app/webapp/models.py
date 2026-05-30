from django.db import models

# Create your models here.
class Student(models.Model):
    GENDER_CHOICES = (
        ('M', 'Male'),
        ('F', 'Female'),
        ('O', 'Other'),
    )

    name = models.CharField(max_length=100)

    email = models.EmailField()

    dob = models.DateField()

    gender = models.CharField(max_length=1, choices=GENDER_CHOICES)

    course = models.CharField(max_length=100)

    hobbies = models.CharField(max_length=255)

    address = models.TextField()

    def __str__(self):
        return self.name




class StudentProfile(models.Model):

    student = models.ForeignKey(
        Student,
        on_delete=models.CASCADE,
        related_name='profiles'
    )

    profile = models.ImageField(
        upload_to='profiles/'
    )

    description = models.TextField(
        blank=True,
        null=True
    )

    created_at = models.DateTimeField(
        auto_now_add=True
    )

    def __str__(self):
        return f"{self.student.name} Profile"