import sys
import yt_dlp

# Get the video URL from the command-line arguments
url = sys.argv[1]

# Store the file name of the downloaded video
downloaded_filename = None

# yt-dlp options with a hook to capture the filename
ydl_opts = {
    'cookiefile': '../www.instagram.com_cookies.txt',  # Path to your cookies file
    'progress_hooks': [lambda d: hook(d)],
    'quiet': True,  # Suppress yt-dlp logs
    'no_warnings': True  # Suppress warnings
}

# Hook function to capture information after download completes
def hook(d):
    global downloaded_filename
    if d['status'] == 'finished':
        downloaded_filename = d['filename']

# Function to download video
def dwl_vid(video_url):
    with yt_dlp.YoutubeDL(ydl_opts) as ydl:
        ydl.download([video_url])

# Download the video from the given URL
link_of_the_video = url.strip()
dwl_vid(link_of_the_video)

# Print the name of the downloaded file
if downloaded_filename:
    print(downloaded_filename)  # Only output the filename
else:
    print("Download failed.")

