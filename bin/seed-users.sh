#!/usr/bin/env bash
##
# Seed Users
#
# Creates dummy users for testing.
#
# Run from root of the code repository.
#
# This script is not automatically triggered by Grunt, and must be run/automated
# separately if desired in a given environment.
##

drush @madness user-create "madnessadmin" --password="admin1" --mail="madnessadmin@example.com"
drush @madness user-add-role "administrator" "madnessadmin"
