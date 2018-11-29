#!/usr/bin/python
import sys
#print sys.path 
sys.path.append("/root/anaconda2/envs/my-rdkit-env/lib/python2.7/site-packages/") 
sys.path.append('/root/anaconda2/envs/my-rdkit-env/bin')
sys.path.append("/root/anaconda2/bin")
#print sys.path
from rdkit import Chem,DataStructs
from rdkit.Chem.Fingerprints import FingerprintMols
from difflib import SequenceMatcher


if __name__ == '__main__':
    #if len(sys.argv) is not 3:
    #    print "Error!"
        
    #else:
        try:
	    #print sys.argv
            r = DataStructs.FingerprintSimilarity(FingerprintMols.FingerprintMol(Chem.MolFromSmiles(sys.argv[1])), FingerprintMols.FingerprintMol(Chem.MolFromSmiles(sys.argv[2])))
            print(r)
            #return r
        except:
            #return 0
	    print "Error"
