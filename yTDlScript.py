import sys
import os
import yt_dlp

# Get the video URL from the command-line arguments
url = sys.argv[1]

# Check if the cookies file exists
cookies_path = '../www.youtube.com_cookies.txt'
if not os.path.exists(cookies_path):
    print(f"Cookies file not found at {cookies_path}")
else:
    print(f"Using cookies file at {cookies_path}")

# Store the file name of the downloaded video
downloaded_filename = None

# Hook function to capture information after download completes
def hook(d):
    global downloaded_filename
    if d['status'] == 'finished':
        downloaded_filename = d['filename']
        print(f"Download finished: {downloaded_filename}")
    elif d['status'] == 'downloading':
        print(f"Downloading... {d['_percent_str']} complete")
    elif d['status'] == 'error':
        print("Error occurred during the download.")

# yt-dlp options with a hook to capture the filename
ydl_opts = {
    'cookiefile': cookies_path,  # Path to your cookies file
    'progress_hooks': [lambda d: hook(d)],
    'quiet': False,  # Show logs
    'verbose': True,  # Enable verbose output
    'no_warnings': False  # Show warnings
}

# Function to download video
def dwl_vid(video_url):
    with yt_dlp.YoutubeDL(ydl_opts) as ydl:
        ydl.download([video_url])

# Download the video from the given URL
link_of_the_video = url.strip()
dwl_vid(link_of_the_video)

# Print the name of the downloaded file
if downloaded_filename:
    print(f"Downloaded file: {downloaded_filename}")
else:
    print("Download failed.")

