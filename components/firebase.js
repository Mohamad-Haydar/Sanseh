import { initializeApp } from "firebase/app";
// for firestore and database information
import { getFirestore } from 'firebase/firestore'

import { 
    getAuth, GoogleAuthProvider, signInWithEmailAndPassword, signOut,
    FacebookAuthProvider, OAuthProvider
} from "firebase/auth";

import { getStorage } from "firebase/storage";



const firebaseConfig = {
    apiKey: "AIzaSyBACwFCdsKSEcMWSGQwdoiHrEN73X246Hs",
    authDomain: "my-store-f466f.firebaseapp.com",
    projectId: "my-store-f466f",
    storageBucket: "my-store-f466f.appspot.com",
    messagingSenderId: "775731119379",
    appId: "1:775731119379:web:1b9f7dbf5193a9f013c6e6",
    measurementId: "G-5CSYKV8KCB"
};

initializeApp(firebaseConfig)
const db = getFirestore()
const auth = getAuth()


// Using a redirect.
const provider = new GoogleAuthProvider();
const storage = getStorage();


export {auth, provider, storage};
export default db
