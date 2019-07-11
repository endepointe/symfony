// assests/js/components/Home.js

import React, { Component } from "react";
import NavBar from "./NavBar";
import { Route, Switch, Link, withRouter } from "react-router-dom";
import Callback from "./Callback";
import SecuredRoute from "./SecuredRoute";
import PrivateResources from "./privateResources";
import PublicResources from "./publicResources";
import auth0Client from "../utils/Auth";
