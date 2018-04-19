FROM python:3-onbuild
# onbuild image expectes to have /usr/src/app path
COPY . /usr/src/app
CMD ["python", "api.py"]
