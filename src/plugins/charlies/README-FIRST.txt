README-FIRST.TXT from Charlie's contents (Piwigo plugin).
since 2014, maintained by jdd (jdd@dodin.org), see changelog for other authors.

Charlie' contents try to add to Piwigo the ability to display many other files formats, namely:

* Video files (flv, mp4, mov)
* Audio files (mp3)
* GPS files (gpx)
* pdf files (pdf)
* archive files (zip)

If you know of a _simple_ free reader for other kind of files, please let me know.

Some files (like video files) can be extremely difficult to display in "any" browser. One have to test Windows (any flavor), Mac, Linux, Android, Iphones and tablets... I can't even try many of these devices, if you have one, please report the working for you.

At the beginning, Charlie's contents aimed to use much more file formats, but it proved impossible to have then in all browsers without recodig (like Youtube do), and it's mostly not possible for our users.

So, when I was the new maintainer (because the previous ones didn't want anymore to keep the task), my first goal was to make the cde simpler. I'm absolutely not a programmer, only a hacker, so every time I didn't know exactly what to do I kept the code as it was, so some pages keep too much complex to our use, but if it's not broken don't fix it...

I also wrote for my own use some script that gives working video files (for example), I will share them here. For html5, for example, mp4 should work every where. Alas it's not. Some kind of mp4 works for one browser but not in the other. The Handbarke script copied here should works everywhere.

Flash (AKA Adobe flash plugin) do not anymore works on Linux - in fact it's no more updated and the old still compatible version is no more secure, so many Linux distributions chose not to provide it anymore. Everybody should go to html5, but even Windows 7, not so old, do not read it by default...

My scripts are Linux scripts, Windows one shouldn't be so different.

FLV scripts "movtopiwi.sh":
This script build flv video files in a subfolder with the same name as the main one, the pwg_representative folder for thumbnails and the thumbnails themselves (at the second 5 of the clip). You just have to move the result to your video folder in piwigo and sync.

#!/bin/bash
# echo usage: movtopiwi.sh *.mp4 (or any video type)
# Do first detox -s utf_8 *
#mkdir piwigo ;
#mkdir piwigo/pwg_representative ;	

rep=$(basename `pwd`) ;
mkdir $rep ;
mkdir $rep/pwg_representative ;

for a ; do
	b=`echo "$a" | cut -d'.' -f1` ;
	ffmpeg -i $a -s 640x360 -b:v 1000k -aspect 16:9 -ar 44100 $rep/$b.flv ;
	ffmpeg -i $a -r 1 -t 00:00:01 -ss 0:0:05 -s 640x360 -f image2 $b.jpg ;

	convert -resize 128x128 $b.jpg $rep/pwg_representative/$b.jpg ;
	rm $b.jpg ;
done
exit


mp4 script. This script do not build the thumbnails, you can add the lines from the previous script if you want. The Handbrake line have to be all on only one line, with no line break. It's only the same one as the graphical interface of Handbrake, preset iphone and ipod touch, and with the option "web optimized"

#!/bin/bash
# echo usage: movtodvd.sh *.MOV

mkdir html5

for a ; do
	b=`echo "$a" | cut -d'.' -f1` ;

HandBrakeCLI  -i "$a" -t 1 --angle 1 -c 1 -o "html5/$b.mp4"  -f mp4  -O  -w 960 --crop 0:0:0:0 --loose-anamorphic  --modulus 2 -e x264 -q 22 -r 30 --pfr -a 1 -E av_aac -6 dpl2 -R Auto -B 160 -D 0 --gain 0 --audio-fallback ac3 --encoder-level="3.1"  --encoder-profile=high  --verbose=1



done
exit
